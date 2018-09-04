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

    'accepted'             => 'O(A) :attribute precisa ser aceito.',
    'active_url'           => 'O(A) :attribute não é uma URL válida.',
    'after'                => 'O(A) :attribute precisa ser de uma data depois de hoje.',
    'after_or_equal'       => 'O(A) :attribute precisa ser uma data depois ou igual a :date.',
    'alpha_dash'           => 'O(A) :attribute só pode conter letras, número e hiféns.',
    'alpha'                => 'O(A) :attribute só pode conter letras.',
    'alpha_num'            => 'O(A) :attribute só pode conter letras e números.',
    'array'                => 'O(A) :attribute precisa ser um array.',
    'before'               => 'O(A) :attribute precisa ser uma data antes de :date.',
    'before_or_equal'      => 'O(A) :attribute precisa ser uma data antes ou igual a :date.',
    'between'              => [
        'numeric' => 'O(A) :attribute precisa ter entre :min e :max.',
        'file'    => 'O(A) :attribute precisa ter entre :min e :max kilobytes.',
        'string'  => 'O(A) :attribute precisa ter entre :min e :max characters.',
        'array'   => 'O(A) :attribute precisa ter entre :min a :max items.',
    ],
    'boolean'              => 'O(A) :attribute precisa ser true or false.',
    'confirmed'            => 'As Senhas não estão iguais.',
    'date'                 => 'O(A) :attribute não é uma data válida.',
    'date_format'          => 'O(A) :attribute não está no formato :format.',
    'different'            => 'O(A) :attribute e :oOr precisam ser diferentes.',
    'digits'               => 'O(A) :attribute precisa ter :digits digitos.',
    'digits_between'       => 'O(A) :attribute precisa ter entre :min a :max digitos.',
    'dimensions'           => 'O(A) :attribute não possui as dimensões corretas.',
    'distinct'             => 'O(A) :attribute possui valor duplicado.',
    'email'                => 'O(A) :attribute precisa ser um e-mail válido.',
    'exists'               => 'O(A) atributo :attribute é inválido.',
    'file'                 => 'O(A) :attribute precisa ser um arquivo.',
    'filled'               => 'O(A) :attribute precisa ter um valor.',
    'image'                => 'O(A) :attribute precisa ser uma imagem.',
    'in'                   => 'O(A) campo :attribute é inválido.',
    'in_array'             => 'O(A) :attribute não existe em :oOr.',
    'integer'              => 'O(A) :attribute precisa ser um inteiro.',
    'ip'                   => 'O(A) :attribute precisa ser um IP válido.',
    'ipv4'                 => 'O(A) :attribute precisa ser um IPv4 válido.',
    'ipv6'                 => 'O(A) :attribute precisa ser um IPv6 válido.',
    'json'                 => 'O(A) :attribute precisa ser um JSON válido.',
    'max'                  => [
        'numeric' => 'O(A) campo deve ser menor que :max.',
        'file'    => 'O(A) :attribute não pode ser maior que :max Kb.',
        'string'  => 'O(A) :attribute não pode ter mais de :max carácteres.',
        'array'   => 'O(A) :attribute não pode ter mais que :max items.',
    ],
    'mimes'                => 'O(A) :attribute precisa ser um arquivo do tipo: :values.',
    'mimetypes'            => 'O(A) :attribute precisa ser um arquivo do tipo: :values.',
    'min'                  => [
        'numeric' => 'O(A) campo :attribute deve ser maior ou igual a :min.',
        'string'  => 'O(A) campo :attribute precisa de no minimo :min caracteres.',
        'file'    => 'O(A) :attribute precisa ter pelo menos :min Kb.',
        'array'   => 'O(A) :attribute deve ter pelo menos :min items.',
    ],
    'not_in'               => 'O(A) :attribute selecionado é inválido.',
    'numeric'              => 'O(A) campo precisa ser númerico.',
    'present'              => 'O(A) :attribute campo precisa estar presente.',
    'regex'                => 'O(A) :attribute formato é inválido.',
    'required'             => 'O(A) :attribute campo é requirido.',
    'required_if'          => 'O(A) :attribute campo é requirido quando :oOr é :value.',
    'required_unless'      => 'O(A) :attribute campo é requirido a não ser que :oOr esteja dentro de :values.',
    'required_with'        => 'O(A) :attribute campo é requirido quando :values está presente.',
    'required_with_all'    => 'O(A) :attribute campo é requirido quando :values está presente.',
    'required_without'     => 'O(A) :attribute campo é requirido quando :values não está presente.',
    'required_without_all' => 'O(A) :attribute campo é requirido quando nenhum dos valores: :values está presente.',
    'same'                 => 'O(A) :attribute e :oOr não devem ser iguais.',
    'size'                 => [
        'numeric' => 'O(A) :attribute precisa ter :size.',
        'file'    => 'O(A) :attribute precisa ter :size Kb.',
        'string'  => 'O(A) :attribute precisa ter :size carácteres.',
        'array'   => 'O(A) :attribute must contain :size items.',
    ],
    'string'               => 'O(A) :attribute precisa ser uma string.',
    'timezone'             => 'O(A) :attribute precisa ser uma timezone válida.',
    'unique'               => 'O(A) :attribute já foi usado.',
    'uploaded'             => 'O(A) :attribute falhou o upload.',
    'url'                  => 'O(A) :attribute formato é inválido.',

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
