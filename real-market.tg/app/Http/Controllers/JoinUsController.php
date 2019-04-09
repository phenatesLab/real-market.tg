<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Newsletter;
use App\Repositories\TypeRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class JoinUsController extends Controller
{
    /**
     * @var TypeRepository
     */
    private $typeRepository;

    public function __construct(TypeRepository $typeRepository)
    {
        $this->typeRepository = $typeRepository;
    }

    public function alerte ()
    {
        $types = $this->typeRepository->getAll();
        return view('joinUs.alert', compact('types'));
    }

    public function contact ()
    {
        return view('joinUs.contact');
    }

    public function contactPerformed (Request $request)
    {
        $validator = Validator::make($request->all(), [
            'last_name' => 'required|alpha|max:20',
            'first_name' => 'required|alpha|max:30',
            'email' => 'required|email',
            'telephone' => 'required',
            'subject' => 'required|alpha_dash',
            'message' => 'required|alpha_dash',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        Contact::create($request->all());

        return redirect('/property');
    }

    public function newsletter ()
    {
        return view('joinUs.newsletter');
    }

    public function newsletterPerformed(Request $request)
    {
        $validator = Validator::make($request->all(), [
           'email' => 'required|alpha_num|email'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        Newsletter::create($request->all());

        return redirect()->route('property.index');
    }
}
