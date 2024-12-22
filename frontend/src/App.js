import './App.css';
import { FightsProvider } from './Providers/FightsContext';
import HomePage from './Components/Home';

function App() {
  return (
    <FightsProvider>
        <HomePage />
    </FightsProvider>
  );
}

export default App;
