const sr = ScrollReveal({ 
    reset: true});

    sr.reveal('#topicos', {duration: 1500 });

    const myModalEl = document.getElementById('Modal-body')
myModalEl.addEventListener('hidden.bs.modal', event => {
  // do something...
})