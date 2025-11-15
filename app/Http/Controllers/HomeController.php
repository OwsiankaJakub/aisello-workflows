<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function contact()
    {
        // Jeśli pytanie już istnieje w sesji (np. po błędzie walidacji), użyj go ponownie
        $mathAnswer = session('math_answer');
        $mathQuestion = session('math_question');
        
        if ($mathAnswer === null || $mathQuestion === null) {
            // Generuj nowe losowe działanie matematyczne dla ochrony przed spamem
            $num1 = rand(1, 10);
            $num2 = rand(1, 10);
            $operation = rand(0, 1); // 0 = dodawanie, 1 = odejmowanie
            
            if ($operation === 0) {
                $answer = $num1 + $num2;
                $question = "$num1 + $num2";
            } else {
                // Upewnij się, że wynik nie będzie ujemny
                if ($num1 < $num2) {
                    $temp = $num1;
                    $num1 = $num2;
                    $num2 = $temp;
                }
                $answer = $num1 - $num2;
                $question = "$num1 - $num2";
            }
            
            // Zapisz odpowiedź i pytanie w sesji
            session([
                'math_answer' => $answer,
                'math_question' => $question
            ]);
            $mathQuestion = $question;
        }
        
        return view('contact', [
            'math_question' => $mathQuestion
        ]);
    }

    public function contactSubmit(Request $request)
    {
        // Sprawdź odpowiedź na pytanie matematyczne
        $mathAnswer = session('math_answer');
        $userAnswer = $request->input('math_answer');
        
        if ($mathAnswer === null || (int)$userAnswer !== (int)$mathAnswer) {
            return redirect()->route('contact')
                ->withErrors(['math_answer' => 'Nieprawidłowa odpowiedź na pytanie matematyczne.'])
                ->withInput();
        }
        
        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'min:10', 'max:5000'],
            'math_answer' => ['required', 'integer'],
            'privacy_policy' => ['required', 'accepted'],
        ], [
            'first_name.required' => 'Imię jest wymagane.',
            'first_name.string' => 'Imię musi być tekstem.',
            'first_name.max' => 'Imię nie może być dłuższe niż 255 znaków.',
            'last_name.required' => 'Nazwisko jest wymagane.',
            'last_name.string' => 'Nazwisko musi być tekstem.',
            'last_name.max' => 'Nazwisko nie może być dłuższe niż 255 znaków.',
            'email.required' => 'Adres email jest wymagany.',
            'email.email' => 'Podaj prawidłowy adres email.',
            'email.max' => 'Adres email nie może być dłuższy niż 255 znaków.',
            'message.required' => 'Wiadomość jest wymagana.',
            'message.string' => 'Wiadomość musi być tekstem.',
            'message.min' => 'Wiadomość musi mieć co najmniej 10 znaków.',
            'message.max' => 'Wiadomość nie może być dłuższa niż 5000 znaków.',
            'math_answer.required' => 'Odpowiedź na pytanie matematyczne jest wymagana.',
            'math_answer.integer' => 'Odpowiedź musi być liczbą całkowitą.',
            'privacy_policy.required' => 'Musisz wyrazić zgodę na przetwarzanie danych osobowych.',
            'privacy_policy.accepted' => 'Musisz wyrazić zgodę na przetwarzanie danych osobowych.',
        ]);

        if ($validator->fails()) {
            return redirect()->route('contact')
                ->withErrors($validator)
                ->withInput();
        }

        try {
            Mail::to('kontakt@aisello.pl')->send(new ContactFormMail(
                $request->first_name,
                $request->last_name,
                $request->email,
                $request->message
            ));

            // Usuń odpowiedź i pytanie z sesji po udanym wysłaniu
            session()->forget(['math_answer', 'math_question']);
            
            return redirect()->route('contact')
                ->with('success', 'Dziękujemy! Twoja wiadomość została wysłana. Skontaktujemy się z Tobą wkrótce.');
        } catch (\Exception $e) {
            return redirect()->route('contact')
                ->withErrors(['error' => 'Wystąpił błąd podczas wysyłania wiadomości. Spróbuj ponownie później.'])
                ->withInput();
        }
    }

    public function howItWorks()
    {
        return view('how-it-works');
    }

    public function solutions()
    {
        return view('solutions');
    }

    public function industries()
    {
        return view('industries');
    }

    public function about()
    {
        return view('about');
    }

    public function solutionMarketing()
    {
        return view('solution.marketing');
    }

    public function solutionEcommerce()
    {
        return view('solution.ecommerce');
    }

    public function solutionHandel()
    {
        return view('solution.handel');
    }

    public function solutionUslugi()
    {
        return view('solution.uslugi');
    }

    public function solutionLogistyka()
    {
        return view('solution.logistyka');
    }

    public function solutionProdukcja()
    {
        return view('solution.produkcja');
    }

    public function solutionSprzedaz()
    {
        return view('solution.sprzedaz');
    }

    public function solutionKsiegowosc()
    {
        return view('solution.ksiegowosc');
    }

    public function solutionHr()
    {
        return view('solution.hr');
    }

    public function solutionIt()
    {
        return view('solution.it');
    }

    public function services()
    {
        return view('services');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function license()
    {
        return view('license');
    }
}
