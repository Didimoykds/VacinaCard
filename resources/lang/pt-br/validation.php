<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | O following language lines contain O default error messages used by
    | O validator class. Some of Ose rules have multiple versions such
    | as O size rules. Feel free to tweak each of Ose messages here.
    |
    */

    'accepted'             => 'O :attribute precisa ser aceito.',
    'active_url'           => 'O :attribute não é uma URL válida.',
    'after'                => 'O :attribute precisa ser de uma data depois de :date.',
    'after_or_equal'       => 'O :attribute precisa ser uma data depois ou igual a :date.',
    'alpha'                => 'O :attribute só pode conter letras.',
    'alpha_dash'           => 'O :attribute só pode conter letras, número e hiféns.',
    'alpha_num'            => 'O :attribute só pode conter letras e números.',
    'array'                => 'O :attribute precisa ser um array.',
    'before'               => 'O :attribute precisa ser uma data antes de :date.',
    'before_or_equal'      => 'O :attribute precisa ser uma data antes ou igual a :date.',
    'between'              => [
        'numeric' => 'O :attribute precisa ter entre :min e :max.',
        'file'    => 'O :attribute precisa ter entre :min e :max kilobytes.',
        'string'  => 'O :attribute precisa ter entre :min e :max characters.',
        'array'   => 'O :attribute precisa ter entre :min a :max items.',
    ],
    'boolean'              => 'O :attribute precisa ser true or false.',
    'confirmed'            => 'As Senhas não estão iguais.',
    'date'                 => 'A :attribute não é uma data válida.',
    'date_format'          => 'O :attribute não está no formato :format.',
    'different'            => 'O :attribute e :oOr precisam ser diferentes.',
    'digits'               => 'O :attribute precisa ter :digits digitos.',
    'digits_between'       => 'O :attribute precisa ter entre :min a :max digitos.',
    'dimensions'           => 'O :attribute não possui as dimensões corretas.',
    'distinct'             => 'O :attribute possui valor duplicado.',
    'email'                => 'O :attribute precisa ser um e-mail válido.',
    'exists'               => 'O atributo :attribute é inválido.',
    'file'                 => 'O :attribute precisa ser um arquivo.',
    'filled'               => 'O :attribute precisa ter um valor.',
    'image'                => 'O :attribute precisa ser uma imagem.',
    'in'                   => 'O campo :attribute é inválido.',
    'in_array'             => 'O :attribute não existe em :oOr.',
    'integer'              => 'O :attribute precisa ser um inteiro.',
    'ip'                   => 'O :attribute precisa ser um IP válido.',
    'ipv4'                 => 'O :attribute precisa ser um IPv4 válido.',
    'ipv6'                 => 'O :attribute precisa ser um IPv6 válido.',
    'json'                 => 'O :attribute precisa ser um JSON válido.',
    'max'                  => [
        'numeric' => 'O campo deve ser menor que :max.',
        'file'    => 'O :attribute não pode ser maior que :max Kb.',
        'string'  => 'O :attribute não pode ter mais de :max carácteres.',
        'array'   => 'O :attribute não pode ter mais que :max items.',
    ],
    'mimes'                => 'O :attribute precisa ser um arquivo do tipo: :values.',
    'mimetypes'            => 'O :attribute precisa ser um arquivo do tipo: :values.',
    'min'                  => [
        'numeric' => 'O campo :attribute deve ser maior ou igual a :min.',
        'file'    => 'O :attribute precisa ter pelo menos :min Kb.',
        'string'  => 'O campo :attribute precisa de no minimo :min caracteres.',
        'array'   => 'O :attribute deve ter pelo menos :min items.',
    ],
    'not_in'               => 'O :attribute selecionado é inválido.',
    'numeric'              => 'O campo precisa ser númerico.',
    'present'              => 'O :attribute campo precisa estar presente.',
    'regex'                => 'O :attribute formato é inválido.',
    'required'             => 'O :attribute campo é requirido.',
    'required_if'          => 'O :attribute campo é requirido quando :oOr é :value.',
    'required_unless'      => 'O :attribute campo é requirido a não ser que :oOr esteja dentro de :values.',
    'required_with'        => 'O :attribute campo é requirido quando :values está presente.',
    'required_with_all'    => 'O :attribute campo é requirido quando :values está presente.',
    'required_without'     => 'O :attribute campo é requirido quando :values não está presente.',
    'required_without_all' => 'O :attribute campo é requirido quando nenhum dos valores: :values está presente.',
    'same'                 => 'O :attribute e :oOr não devem ser iguais.',
    'size'                 => [
        'numeric' => 'O :attribute precisa ter :size.',
        'file'    => 'O :attribute precisa ter :size Kb.',
        'string'  => 'O :attribute precisa ter :size carácteres.',
        'array'   => 'O :attribute must contain :size items.',
    ],
    'string'               => 'O :attribute precisa ser uma string.',
    'timezone'             => 'O :attribute precisa ser uma timezone válida.',
    'unique'               => 'O :attribute já foi usado.',
    'uploaded'             => 'O :attribute falhou o upload.',
    'url'                  => 'O :attribute formato é inválido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using O
    | convention "attribute.rule" to name O lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | O following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'dataNasc' => 'data de nascimento',
        'password' => 'senha'
    ],

];
