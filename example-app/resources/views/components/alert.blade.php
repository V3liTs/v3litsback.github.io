<div >
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
    <p>Sono un componente</p>
    TIPO:{{ $type }}<br>
    Messaggio:{{ $message }}<br>
    Panino:{{ $alertType }}<br>
    Paramentro che viene passato al metodo isSelected con davanti un $
    {{ $isSelected($value) ? 'selezionato' : 'NON selezionato' }}
</div>

<div class="alert alert-{{ $type }}">
    {{ $message }}
</div>