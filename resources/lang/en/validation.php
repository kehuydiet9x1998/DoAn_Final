<?php

return [
  /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

  'accepted' => ':attribute phải được xác nhận.',
  'active_url' => ':attribute không phải URL hợp lệ.',
  'after' => ':attribute phải sau ngày :date.',
  'after_or_equal' => ':attribute phải kể từ ngày :date.',
  'alpha' => ':attribute chỉ có thể chứa chữ cái.',
  'alpha_dash' =>
    ':attribute chỉ có thể chứa chữ, chữ số, gạch ngang và gạch dưới.',
  'alpha_num' => ':attribute chỉ có thể chứa chữ và số.',
  'array' => ':attribute phải là một mảng.',
  'before' => ':attribute phải trước ngày :date.',
  'before_or_equal' => ':attribute phải nhỏ hơn hoặc bằng ngày :date.',
  'between' => [
    'numeric' => ':attribute phải nằm trong khoảng :min và :max.',
    'file' => ':attribute phải nằm trong khoảng :min và :max kb.',
    'string' => ':attribute phải nằm trong khoảng :min và :max ký tự.',
    'array' => ':attribute phải nằm trong khoảng :min và :max phần tử.',
  ],
  'boolean' => ':attribute phải là true hoặc false.',
  'confirmed' => ':attribute xác nhận không khớp.',
  'date' => ':attribute không phải ngày hợp lệ.',
  'date_equals' => ':attribute phải là ngày :date.',
  'date_format' => ':attribute không khớp với định dạng :format.',
  'different' => ':attribute và :other phải khác nhau.',
  'digits' => ':attribute phải gồm :digits chữ số.',
  'digits_between' => ':attribute phải nằm trong khoảng :min và :max chữ số.',
  'dimensions' => ':attribute có kích thước không hợp lệ.',
  'distinct' => ':attribute đã tồn tại.',
  'email' => ':attribute phải là một địa chỉ email.',
  'ends_with' => ':attribute phải kết thúc bằng: :values.',
  'exists' => ':attribute được chọn không hợp lệ.',
  'file' => ':attribute phải là một file.',
  'filled' => ':attribute phải có một giá trị.',
  'gt' => [
    'numeric' => ':attribute phải lớn hơn :value.',
    'file' => ':attribute phải lớn hơn :value kb.',
    'string' => ':attribute phải lớn hơn :value ký tự.',
    'array' => ':attribute phải có nhiều hơn :value phần tự.',
  ],
  'gte' => [
    'numeric' => ':attribute phải lớn hơn hoặc bằng :value.',
    'file' => ':attribute phải lớn hơn hoặc bằng :value kb.',
    'string' => ':attribute phải lớn hơn hoặc bằng :value ký tự.',
    'array' => ':attribute phải có :value phần tử hoặc hơn.',
  ],
  'image' => ':attribute phải là một ảnh.',
  'in' => ':attribute được chọn không đúng.',
  'in_array' => ':attribute không nằm trong :other.',
  'integer' => ':attribute phải là một số nguyên.',
  'ip' => ':attribute phải là một địa chỉ IP.',
  'ipv4' => ':attribute phải là một địa chỉ IPv4.',
  'ipv6' => ':attribute phải là một địa chỉ IPv6.',
  'json' => ':attribute phải là một chuỗi JSON.',
  'lt' => [
    'numeric' => ':attribute phải nhỏ hơn :value.',
    'file' => ':attribute phải nhỏ hơn :value kb.',
    'string' => ':attribute phải nhỏ hơn :value ký tự.',
    'array' => ':attribute phải có ít hơn :value phần tử.',
  ],
  'lte' => [
    'numeric' => ':attribute phải nhỏ hơn hoặc bằng :value.',
    'file' => ':attribute phải nhỏ hơn hoặc bằng :value kb.',
    'string' => ':attribute phải nhỏ hơn hoặc bằng :value ký tự.',
    'array' => ':attribute phải có nhiều hơn :value phần tử.',
  ],
  'max' => [
    'numeric' => ':attribute không được lớn hơn :max.',
    'file' => ':attribute không được lớn hơn :max kb.',
    'string' => ':attribute không được lớn hơn :max ký tự.',
    'array' => ':attribute không được có nhiều hơn :max phần tử.',
  ],
  'mimes' => ':attribute phải thuộc kiểu :values.',
  'mimetypes' => ':attribute phải thuộc kiểu :values.',
  'min' => [
    'numeric' => ':attribute phải lớn hơn :min.',
    'file' => ':attribute phải lớn hơn :min kb.',
    'string' => ':attribute phải lớn hơn :min ký tự.',
    'array' => ':attribute phải có nhiều hơn :min phần tử.',
  ],
  'not_in' => ':attribute được chọn không đúng.',
  'not_regex' => ':attribute định dạng không đúng.',
  'numeric' => ':attribute phải là một số.',
  'password' => 'Mật khẩu không chính xác.',
  'present' => ':attribute trường must be present.',
  'regex' => ':attribute định dạng không đúng.',
  'required' => ':attribute không được để trống.',
  'required_if' => ':attribute phải điền khi :other là :value.',
  'required_unless' => ':attribute trường phải điền trừ khi :other là :values.',
  'required_with' => ':attribute phải điền khi :values là present.',
  'required_with_all' => ':attribute phải điền khi :values are present.',
  'required_without' => ':attribute phải điền khi :values là not present.',
  'required_without_all' =>
    ':attribute phải điền khi none of :values are present.',
  'same' => ':attribute và :other phải trùng nhau.',
  'size' => [
    'numeric' => ':attribute phải là :size.',
    'file' => ':attribute phải là :size kb.',
    'string' => ':attribute phải là :size ký tự.',
    'array' => ':attribute phải chứa :size phần tử.',
  ],
  'starts_with' =>
    ':attribute phải bắt đầu bằng một trong các giá trị: :values.',
  'string' => ':attribute phải là một chuỗi.',
  'timezone' => ':attribute phải là một múi giờ.',
  'unique' => ':attribute đã được sử dụng.',
  'uploaded' => ':attribute upload không thành công.',
  'url' => ':attribute định dạng không đúng.',
  'uuid' => ':attribute phải là một UUID.',

  /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. Thlà makes it quick to
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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

  'attributes' => [],
];