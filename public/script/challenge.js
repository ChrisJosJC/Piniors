
let preview = document.getElementById("preview")

const createHTML = ({html, css, js}) =>{
    return `
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <style>${css}</style>
    </head>
    <body>
        ${html}

        <script>
            ${js}
        </script>
    </body>
    </html>
    `
}

const update = () => {
    let html = document.getElementById("html").value
    let css = document.getElementById("css").value
    let js = document.getElementById("js").value
    let hashed = `/challenges/token/${window.btoa(html)}|${window.btoa(css)}|${window.btoa(js)}`
    history.replaceState(null, null, hashed)
    const doc = createHTML({html,css,js})
    preview.setAttribute('srcdoc', doc)
}

html.addEventListener("input", update)
css.addEventListener("input", update)
js.addEventListener("input", update)


update()
