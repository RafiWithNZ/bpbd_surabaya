
import { MapContainer,TileLayer } from 'react-leaflet';
import 'leaflet/dist/leaflet.css'

function App() {
  return (
    <div className='w-3/4'>
 <MapContainer center={[-7.275612,112.6302817]} zoom={13}>
<TileLayer
attribution='&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
url='https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'
/>
   </MapContainer>
    </div>
  
  );
}

export default App;
