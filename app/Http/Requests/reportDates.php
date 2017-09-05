<?php

namespace jptel\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class reportDates extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (\Auth::check()) {
            return true;
        } else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fromDate' => 'required|date|after_or_equal:' . date('Y-m-d',strtotime(\request('toDate') . ' -3 month')),
            'toDate' => 'required|date|before_or_equal:'. date('Y-m-d',strtotime('yesterday'))
        ];
    }

    public function messages()
    {
        return[
            'fromDate.required' => 'La fecha es obligatoria.',
            'fromDate.date' => 'Debe ser una fecha.',
            'fromDate.after_or_equal' => 'La fecha en \'Desde\' debe ser posterior o igual a: ' .  date('Y-m-d',strtotime(\request('toDate') . ' -3 month')),
            'toDate.required' => 'La fecha es obligatoria.',
            'toDate.date' => 'Debe ser una fecha.',
            'toDate.before_or_equal' => 'La fecha en \'Hasta\' debe ser anterior o igual a: ' . date('d-m-Y',strtotime('yesterday')),
        ];
    }
}
