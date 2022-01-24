<?php 
$config = array(
        'form_rule' => array(
                array(
                        'field' => 'item_name',
                        'label' => 'Product Name',
                        'rules' => 'alpha_numeric_spaces|required'
                ),
                array(
                        'field' => 'quantity',
                        'label' => 'Item Quantity',
                        'rules' => 'numeric|required'
                ),
                array(
                        'field' => 'code',
                        'label' => 'Product Code',
                        'rules' => 'required|alpha_numeric_spaces'
                ),
                array(
                        'field' => 'rate',
                        'label' => 'Price',
                        'rules' => 'required|numeric'
                )    
     
        ),
        'emails' => array(
                array(
                        'field' => 'uname',
                        'label' => 'Username',
                        'rules' => 'alpha_numeric_spaces|required|min_length[5]'
                ),
                array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'required|valid_email'
                ),
                array(
                        'field' => 'pass',
                        'label' => 'Password',
                        'rules' => 'required|alpha_numeric|max_length[12]|min_length[8]'
                )
                
        ),
         'login' => array(
                array(
                        'field' => 'username',
                        'label' => 'Username',
                        'rules' => 'trim|required|min_length[5]|max_length[12]|alpha_numeric'
                ),
                array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'trim|required|min_length[8]|max_length[12]|alpha_numeric'
                ),
        ),
         'guest' => array(
                array(
                        'field' => 'firstname',
                        'label' => 'First Name',
                        'rules' => 'trim|required|alpha'
                ),
                array(
                        'field' => 'lastname',
                        'label' => 'Last Name',
                        'rules' => 'trim|required|alpha'
                ),
                array(
                        'field' => 'email',
                        'label' => 'Email address',
                        'rules' => 'required|valid_email'
                ),
                array(
                        'field' => 'telephone',
                        'label' => 'Telephone',
                        'rules' => 'numeric|max_length[7]|min_length[7]'
                ),
                 array(
                        'field' => 'mobile',
                        'label' => 'Mobile no',
                        'rules' => 'required|max_length[10]|min_length[10]'
                ),
                array(
                        'field' => 'company',
                        'label' => 'Company',
                        'rules' => 'alpha_numeric_spaces'
                ),
                 array(
                        'field' => 'com_id',
                        'label' => 'Company ID',
                        'rules' => 'alpha_numeric_spaces'
                ),
                array(
                        'field' => 'add1',
                        'label' => 'Address 1',
                        'rules' => 'required|alpha_numeric_spaces'
                ),
                 array(
                        'field' => 'add2',
                        'label' => 'Address 2',
                        'rules' => 'alpha_numeric_spaces'
                ),
                 array(
                        'field' => 'city',
                        'label' => 'City',
                        'rules' => 'required|alpha_numeric_spaces'
                ),
                array(
                        'field' => 'postcode',
                        'label' => 'Postcode',
                        'rules' => 'required|numeric|max_length[5]|min_length[5]'
                ),
        )
);

 ?>