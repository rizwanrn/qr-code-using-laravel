# qr-code-using-laravel
Create your own customised QR code in Laravel and Generate as a PNG Image in few steps.



#After installing successfull Laravel project

#Step 2
Get into the command prompt, type the given command, and begin installing the simplesoftwareio/simple-qrcode package; it profoundly helps create various kinds of QR codes in the laravel app.

     composer require simplesoftwareio/simple-qrcode


#Step 3
Open config/app.php and add these lines

    'providers' => [
        ....                
        SimpleSoftwareIO\QrCode\QrCodeServiceProvider::class,
    ],
    
    'aliases' => [
        ....                
        'QrCode' => SimpleSoftwareIO\QrCode\Facades\QrCode::class,
    ]
    
    
###
Now You can use QrCode Class anywhere in your blade files

I have already added an example blade file which you can call using directly using route or controller.
If you need detailed info about this Plugin read this Doc https://www.simplesoftware.io/#/docs/simple-qrcode

Thanks for reading my Blah Blah.

If you face any problem and want me to add any functionality in your website or looking for any Development help you can mail me on rizwanpatel.rnk@gmail.com
