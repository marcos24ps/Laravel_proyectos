<?php

namespace App\Http\Requests\API;

use App\Models\Pedido;
use InfyOm\Generator\Request\APIRequest;

class UpdatePedidoAPIRequest extends APIRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = Pedido::$rules;
        
        return $rules;
    }
}
