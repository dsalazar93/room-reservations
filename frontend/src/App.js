import './App.css';

import { BrowserRouter, Routes, Route } from 'react-router-dom';

import Rooms from './Components/Rooms.js'
import ViewRoom from './Components/ViewRoom.js'

function App() {
  return (
    <div className="App my-3">
      <header className='my-4'>
        <h1 className="text-center">Reserva de habitaciones</h1>
      </header>
      <BrowserRouter>
        <Routes>
          <Route path='/' element={<Rooms />} />
          <Route path="/room/:id" element={<ViewRoom />} />
        </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;
