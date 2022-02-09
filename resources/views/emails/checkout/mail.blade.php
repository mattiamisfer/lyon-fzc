@component('mail::message')
 
 

 


@component('mail::table')
|        |          |   
| ------------- |-------------|
| Name     | {{$data['name']}}      |
| Email      | {{$data['email']}} |
| Mobile      | {{$data['mobile']}} |
| Quantity      | {{$data['quantity']}} |
| Address      | {{$data['address']}} |
@endcomponent
     
           

                
           
    
 

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
