





async function getData() {

    fetch('/api/user/view/all')
        .then((response) => response.json())
        .then((data) => {
            console.log(data)
            const html = data.map(user=>{
                return (
                    `<p>Id: ${user.id}</p>
                    <p>Name: ${user.name}</p>
                    <p>Email: ${user.email}</p>
                    <p>Creado : ${user.created_at}</p>`
                    )
            }).join("")
            document.getElementById("te").innerHTML=html
        });
}

getData()

