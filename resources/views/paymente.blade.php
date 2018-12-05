    <form method="POST" action="{{ route('orden') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        Orden N°: <input type="text" name="orden" id="orden" value="12304" placeholder="1000" required><br>
        Monto: <input type="text" name="monto" id="monto" value="5000" placeholder="20000" required><br>
        Descripción: <input type="text" name="concepto" id="concepto" value="prueba" placeholder="Pago de Orden N° 1000" required><br>
        Email pagador (opcional): <input type="email" name="pagador" id="pagador" placeholder="usuario@email.com"><br>
        <br>
        <button type="submit">Aceptar</button>
    </form>