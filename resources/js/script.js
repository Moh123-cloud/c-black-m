document.querySelector('#images').addEventListener('drop', function(e) {
  e.preventDefault();
  let dt = e.dataTransfer;
  let files = dt.files;
  let input = document.querySelector('#imagesInput');
  for (let i = 0; i < files.length; i++) {
    input.files.add(files[i]);
  }
  input.dispatchEvent(new Event('change'));
});
