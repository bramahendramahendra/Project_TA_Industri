<?php
$config = array(
    'register' => array(
        array(
            'field' => 'first_name',
            'label' => 'First Name',
            'rules' => 'required',
            'errors' => array(
                'required' => '<b style="color:red;">Nama Depan anda masih kosong.</b>',
            )
        ),
        array(
            'field' => 'last_name',
            'label' => 'Last Name',
            'rules' => 'required',
            'errors' => array(
                'required' => '<b style="color:red;">Nama Belakang anda masih kosong.</b>',
            )
        ),
        array(
            'field' => 'username1',
            'label' => 'Username',
            'rules' => 'required|min_length[8]|max_length[20]',
            'errors' => array(
                'required' => '<b style="color:red;">Username anda masih kosong.</b>',
                'min_length' => '<b style="color:red;">Username minimal 8 karakter.</b>',
                'max_length' => '<b style="color:red;">Username maksimal 20 karakter.</b>'
            )
        ),
        array(
            'field' => 'email1',
            'label' => 'Email',
            'rules' => 'required|valid_email',
            'errors' => array(
                'required' => '<b style="color:red;">Email anda masih kosong.</b>',
                'valid_email' => '<b style="color:red;">Alamat Email tidak valid.</b>'
            )
        ),
        array(
            'field' => 'password1',
            'label' => 'Password',
            'rules' => 'required|min_length[8]|max_length[15]',
            'errors' => array(
                'required' => '<b style="color:red;">Password anda masih kosong.</b>',
                'min_length' => '<b style="color:red;">Password minimal 8 karakter.</b>',
                'max_length' => '<b style="color:red;">Password maksimal 15 karakter.</b>'
            )
        ),
        array(
            'field' => 'confirm_password',
            'label' => 'Confirm Password',
            'rules' => 'required|min_length[8]|max_length[15]|matches[password1]',
            'errors' => array(
                'required' => '<b style="color:red;">Confirm Password anda masih kosong.</b>',
                'min_length' => '<b style="color:red;">Confirm Password minimal 8 karakter.</b>',
                'max_length' => '<b style="color:red;">Confirm Password maksimal 20 karakter.</b>',
                'matches' => '<b style="color:red;">Confirm Password tidak sesuai dengan password.</b>',
            )
        ),
        array(
            'field' => 'term_of_service',
            'label' => 'Term_of Service',
            'rules' => 'required',
            'errors' => array(
                'required' => '<b style="color:red;">Checklist terlebih dahulu.</b>'
            )
        ),

    ),
    'login' => array(
        array(
            'field' => 'username1',
            'label' => 'Username',
            'rules' => 'required|min_length[8]|max_length[20]',
            'errors' => array(
                'required' => '<b style="color:red;">Username anda masih kosong.</b>',
                'min_length' => '<b style="color:red;">Username minimal 8 karakter.</b>',
                'max_length' => '<b style="color:red;">Username maksimal 20 karakter.</b>'
            )
        ),
        array(
            'field' => 'password1',
            'label' => 'Password',
            'rules' => 'required|min_length[8]|max_length[15]',
            'errors' => array(
                'required' => '<b style="color:red;">Password anda masih kosong.</b>',
                'min_length' => '<b style="color:red;">Password minimal 8 karakter.</b>',
                'max_length' => '<b style="color:red;">Password maksimal 15 karakter.</b>'
            )
        )
    ),
    'signup-agen' => array(
        array(
            'field' => 'first_name',
            'label' => 'First Name',
            'rules' => 'required',
            'errors' => array(
                'required' => '<b style="color:red;">Nama Depan anda masih kosong.</b>',
            )
        ),
        array(
            'field' => 'last_name',
            'label' => 'Last Name',
            'rules' => 'required',
            'errors' => array(
                'required' => '<b style="color:red;">Nama Belakang anda masih kosong.</b>',
            )
        ),
        array(
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'required|min_length[8]|max_length[20]',
            'errors' => array(
                'required' => '<b style="color:red;">Username anda masih kosong.</b>',
                'min_length' => '<b style="color:red;">Username minimal 8 karakter.</b>',
                'max_length' => '<b style="color:red;">Username maksimal 20 karakter.</b>'
            )
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email',
            'errors' => array(
                'required' => '<b style="color:red;">Email anda masih kosong.</b>',
                'valid_email' => '<b style="color:red;">Alamat Email tidak valid.</b>'
            )
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|min_length[8]|max_length[15]',
            'errors' => array(
                'required' => '<b style="color:red;">Password anda masih kosong.</b>',
                'min_length' => '<b style="color:red;">Password minimal 8 karakter.</b>',
                'max_length' => '<b style="color:red;">Password maksimal 15 karakter.</b>'
            )
        ),
        array(
            'field' => 'confirm_password',
            'label' => 'Confirm Password',
            'rules' => 'required|min_length[8]|max_length[15]|matches[password]',
            'errors' => array(
                'required' => '<b style="color:red;">Confirm Password anda masih kosong.</b>',
                'min_length' => '<b style="color:red;">Confirm Password minimal 8 karakter.</b>',
                'max_length' => '<b style="color:red;">Confirm Password maksimal 20 karakter.</b>',
                'matches' => '<b style="color:red;">Confirm Password tidak sesuai dengan password.</b>',
            )
        ),
        array(
            'field' => 'term_of_service',
            'label' => 'Term_of Service',
            'rules' => 'required',
            'errors' => array(
                'required' => '<b style="color:red;">Checklist terlebih dahulu.</b>'
            )
        ),

    ),
    'signin-agen' => array(
        array(
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'required|min_length[8]|max_length[20]',
            'errors' => array(
                'required' => '<b style="color:red;">Username anda masih kosong.</b>',
                'min_length' => '<b style="color:red;">Username minimal 8 karakter.</b>',
                'max_length' => '<b style="color:red;">Username maksimal 20 karakter.</b>'
            )
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|min_length[8]|max_length[15]',
            'errors' => array(
                'required' => '<b style="color:red;">Password anda masih kosong.</b>',
                'min_length' => '<b style="color:red;">Password minimal 8 karakter.</b>',
                'max_length' => '<b style="color:red;">Password maksimal 15 karakter.</b>'
            )
        )
    ),
    'create-pesanan' => array(
        array(
            'field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required',
            'errors' => array(
                'required' => '<b style="color:red;">Alamat anda masih kosong.</b>',
            )
        ),
        array(
            'field' => 'tanggal_pemesanan',
            'label' => 'Tanggal Pemesanan',
            'rules' => 'required',
            'errors' => array(
                'required' => '<b style="color:red;">Tanggal Pemesanan anda masih kosong.</b>',
            )
        ),
        array(
            'field' => 'tipe_barang',
            'label' => 'Tipe Barang',
            'rules' => 'required',
            'errors' => array(
                'required' => '<b style="color:red;">Tipe Barang anda masih kosong.</b>',
            )
        ),
        array(
            'field' => 'jumlah_barang',
            'label' => 'Jumlah Barang',
            'rules' => 'required',
            'errors' => array(
                'required' => '<b style="color:red;">Jumlah Barang anda masih kosong.</b>',
            )
        ),
        array(
            'field' => 'harga_zak',
            'label' => 'Harga (Zak)',
            'rules' => 'required',
            'errors' => array(
                'required' => '<b style="color:red;">Harga (Zak) anda masih kosong.</b>',
            )
        ),
        array(
            'field' => 'nomor_telepon',
            'label' => 'Nomor Telepon',
            'rules' => 'required',
            'errors' => array(
                'required' => '<b style="color:red;">Nomor Telepon anda masih kosong.</b>',
            )
        ),
    ),
    'create-keuangan' => array(
        array(
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'required|min_length[8]|max_length[20]',
            'errors' => array(
                'required' => '<b style="color:red;">Username anda masih kosong.</b>',
                'min_length' => '<b style="color:red;">Username minimal 8 karakter.</b>',
                'max_length' => '<b style="color:red;">Username maksimal 20 karakter.</b>'
            )
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email',
            'errors' => array(
                'required' => '<b style="color:red;">Email anda masih kosong.</b>',
                'valid_email' => '<b style="color:red;">Alamat Email tidak valid.</b>'
            )
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|min_length[8]|max_length[15]',
            'errors' => array(
                'required' => '<b style="color:red;">Password anda masih kosong.</b>',
                'min_length' => '<b style="color:red;">Password minimal 8 karakter.</b>',
                'max_length' => '<b style="color:red;">Password maksimal 15 karakter.</b>'
            )
        )
        
    ),
    'create-penjualan' => array(
        array(
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'required|min_length[8]|max_length[20]',
            'errors' => array(
                'required' => '<b style="color:red;">Username anda masih kosong.</b>',
                'min_length' => '<b style="color:red;">Username minimal 8 karakter.</b>',
                'max_length' => '<b style="color:red;">Username maksimal 20 karakter.</b>'
            )
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email',
            'errors' => array(
                'required' => '<b style="color:red;">Email anda masih kosong.</b>',
                'valid_email' => '<b style="color:red;">Alamat Email tidak valid.</b>'
            )
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|min_length[8]|max_length[15]',
            'errors' => array(
                'required' => '<b style="color:red;">Password anda masih kosong.</b>',
                'min_length' => '<b style="color:red;">Password minimal 8 karakter.</b>',
                'max_length' => '<b style="color:red;">Password maksimal 15 karakter.</b>'
            )
        ),
        
    ),
    'login-department' => array(
        array(
            'field' => 'username1',
            'label' => 'Username',
            'rules' => 'required|min_length[8]|max_length[20]',
            'errors' => array(
                'required' => '<b style="color:red;">Username anda masih kosong.</b>',
                'min_length' => '<b style="color:red;">Username minimal 8 karakter.</b>',
                'max_length' => '<b style="color:red;">Username maksimal 20 karakter.</b>'
            )
        ),
        array(
            'field' => 'password1',
            'label' => 'Password',
            'rules' => 'required|min_length[8]|max_length[15]',
            'errors' => array(
                'required' => '<b style="color:red;">Password anda masih kosong.</b>',
                'min_length' => '<b style="color:red;">Password minimal 8 karakter.</b>',
                'max_length' => '<b style="color:red;">Password maksimal 15 karakter.</b>'
            )
        )
    ),
    'ganti-password' => array(
        array(
            'field' => 'password_lama',
            'label' => 'Password Lama',
            'rules' => 'required|min_length[8]|max_length[20]',
            'errors' => array(
                'required' => '<b style="color:red;">Username anda masih kosong.</b>',
                'min_length' => '<b style="color:red;">Username minimal 8 karakter.</b>',
                'max_length' => '<b style="color:red;">Username maksimal 20 karakter.</b>'
            )
        ),
        array(
            'field' => 'password_baru',
            'label' => 'Password Baru',
            'rules' => 'required|min_length[8]|max_length[15]',
            'errors' => array(
                'required' => '<b style="color:red;">Password anda masih kosong.</b>',
                'min_length' => '<b style="color:red;">Password minimal 8 karakter.</b>',
                'max_length' => '<b style="color:red;">Password maksimal 15 karakter.</b>'
            )
        ),
        array(
            'field' => 'confirm_password_baru',
            'label' => 'Confirm Password Baru',
            'rules' => 'required|min_length[8]|max_length[15]|matches[password_baru]',
            'errors' => array(
                'required' => '<b style="color:red;">Confirm Password anda masih kosong.</b>',
                'min_length' => '<b style="color:red;">Confirm Password minimal 8 karakter.</b>',
                'max_length' => '<b style="color:red;">Confirm Password maksimal 20 karakter.</b>',
                'matches' => '<b style="color:red;">Confirm Password Barru tidak sesuai dengan Password Baru.</b>',
            )
        )
    )
);