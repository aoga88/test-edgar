import React from 'react';
import ReactDOM from 'react-dom';
import swal from 'sweetalert2';


const SaveName=() =>{
    const [name, setName] = React.useState('');


    const handleSubmit= (e) =>{
        e.preventDefault();
        axios.post('api/save-name',{name:name}).then(({data}) => {
                    swal.fire({
                        type: 'success',
                        text: 'Los cambios han sido guardados'
                    });
                }).catch((error) => {
                    if (error.response) {
                        swal.fire({
                            type: 'error',
                            text: 'Ha ocurrido un error al procesar la información, por favor vuelve a intentarlo.'
                        });
                    }
                });
    }


    return (
        <>
        
        <form name="saveNameForm" onSubmit={handleSubmit} >

        <div className="col-12">
            <div className="form-group">
            <label>Nombre(s):</label>
            <br />
            <input type="text" className="form-control" name="name" id="field-1" value={name} onChange={(e)=>setName(e.target.value)}/>
            </div>

            </div>

            <button type='submit'> Guardar</button>
        </form>
        </>
    )
}

var element = document.getElementById('save-name');


if (element) {
    ReactDOM.render(<SaveName/>, element);
}

export default SaveName;

