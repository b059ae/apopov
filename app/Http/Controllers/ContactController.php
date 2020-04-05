<?php

namespace App\Http\Controllers;

use App\Enums\LeadType;
use App\Services\LeadsService;
use BenSampo\Enum\Rules\EnumValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Сохранение лида
     *
     * @param Request $request
     * @param LeadsService $leadsService
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request, LeadsService $leadsService)
    {
        try{
            $this->validator($request->all())->validate();

            $leadsService->create($request->all());
        }catch (\Throwable $e){
            return response()->json([
                'response' => 'error',
                'message' => $e->getMessage(),
            ]);
        }

        //flash('Ваша заявка успешно отправлена. Спасибо за обращение! В ближайшее время с Вами свяжется специалист по кредитным историям.')->success();

        return response()->json([
            'response' => 'success',
        ]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    private function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'email' => ['required', 'email'],
            'type' => ['required', new EnumValue(LeadType::class)],
            'message' => ['string'],
        ]);
    }
}
