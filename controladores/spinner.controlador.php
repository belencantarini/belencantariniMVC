<script>

    const btn = document.getElementById('btn');
    const text = document.getElementById('text');
    const spin = document.getElementById('spin');
    const form = document.getElementById('form');

    form.addEventListener("submit", function(){
    spin.classList.remove("d-none");
    text.classList.add("d-none");
    setTimeout(()=>{
        spin.classList.add('d-none');
        text.classList.remove('d-none');
    },8000);
    });

    

</script>