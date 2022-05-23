<a href="#" onclick="deleteHonyarara()">削除する</a>
<form action="{{ route('honyarara.destroy', $honyarara) }}" method="post" id="delete-form">
    @csrf
    @method('delete')
</form>
<script>
    function deleteHonyarara() {
        event.preventDefault();
        if (window.confirm('本当に削除しますか？')) {
            document.getElementById('delete-form').submit();
        }
    }
</script>