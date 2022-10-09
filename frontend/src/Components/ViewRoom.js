import axios from 'axios'
import React,{Fragment, useState, useEffect} from 'react'
import { Link, useParams } from 'react-router-dom'

import image from '../images/room.jpg'

const api = 'http://localhost:8000/api'


const ViewRoom = () => {
    const [room, setRoom] = useState([])
    const {id} = useParams()
    useEffect(() => { getRoom() }, [])
    
    const getRoom = async () => {
        const response = await axios.get(`${api}/room/${id}`)
        setRoom(response.data)
    }

    return (
        <Fragment>
            <div className="container">
                <div className="row">
                    <div className="col-12">
                        <div className="row">
                            <div className="col-6">
                                <img src={image} className="img-fluid" alt="" />
                            </div>
                            <div className="col-6 pl-3">
                                <h3>Habitación {room.number}</h3>
                                <p style={{textAlign: 'left'}}>{room.description}</p>
                                {/* <ul style={{textAlign: 'left'}}>
                                    <li>Tipo de habitación: {room.type.name}</li>
                                    <li>Descripción de habitación: {room.type.description}</li>
                                    <li>Huespedes: {room.type.guests}</li>
                                    <li>Camas: {room.type.beds}</li>
                                    <li>Baños: {room.type.bathrooms}</li>
                                    <li>Precio: {room.type.price}</li>

                                </ul> */}
                                <Link to="/" className='btn btn-info'>Regresar</Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </Fragment>
    )
}

export default ViewRoom