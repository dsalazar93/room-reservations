import React, {Fragment, useEffect, useState} from 'react'
import axios from 'axios'
import {Link} from 'react-router-dom'

import image from '../images/room.jpg'

const api = 'http://localhost:8000/api'


const Rooms = () => {
    const [rooms, setRooms] = useState([])
    useEffect(() => { getAllRooms() }, [])
    
    const getAllRooms = async () => {
        const response = await axios.get(`${api}/rooms`)
        
        setRooms(response.data)
    }

    return (
        <Fragment>
            <div className="container">
                <div className="row">
                    {rooms.map((room) => (
                        <div className="col-3 mb-3">
                            <div className="col-12">
                                <div className="card w-100">
                                    <img src={image} className="card-img-top" alt="" />
                                    <div className="card-body">
                                        <h5 className="card-title">Habitación {room.number}</h5>
                                        <p className="card-text">{room.description.substring(0, 25)}</p>
                                        <Link to={`/room/${room.id}`} className="btn btn-info">Ver</Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ))}
                </div>
            </div>
        </Fragment>
    )
}

export default Rooms