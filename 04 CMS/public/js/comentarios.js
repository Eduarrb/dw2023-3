import axios from 'https://cdn.jsdelivr.net/npm/axios@1.3.5/+esm';

// // axios.get('https://pokeapi.co/api/v2/pokemon/pikachu')
// //     .then(res => {
// //         console.log(res.data);
// //     })
// //     .catch(err => {
// //         console.log(err)
// //     })

axios.get('apiRequests/getComentarios.php?prod_id=2')
    .then(res => {
        console.log(res.data);
    })
    .catch(err => {
        console.log(err)
    })
