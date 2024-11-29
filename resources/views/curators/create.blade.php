<form action="{{ url('cura') }}" method="POST">
    @csrf
    <input type="text" name="description" placeholder="Nome do produto" required>
    
    <button type="submit">Criar produto</button>
</form>

