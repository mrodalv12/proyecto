document.getElementById('adjunto').addEventListener('change',()=>{
    const file = event.target.files[0];
    console.log(file);
    let str = "Ningun archivo seleccionado";
    if (file){
        str = `${file.name} - ${file.size}bytes`;
    }
    document.getElementById('info-file').innerHTML=str;
})

function  getFileSize(){
    const KB = 1024;
    const MB = KB*KB;
    const GB = MB*MB;
    if (size< KB){
        return `${size} bytes`;
    }
    if (size < MB){
        return `${size / KB.toFixed(2)} KB`;
    }
    if (size < GB){
        return `${size / MB.toFixed(2)} MB`;
    }
    return `${size / GB.toFixed(2)} GB`;
}