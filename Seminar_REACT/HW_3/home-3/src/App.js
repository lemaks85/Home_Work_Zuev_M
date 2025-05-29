import "./App.css";
import TemperatureConverter from "./components/TemperatureConverter";
import ToDoList from "./components/ToDoList";

function App() {
  return (
    <div className="Tasks">
      <div className="FirstTask">
        <TemperatureConverter />
      </div>
      <div className="SecondTask">
        <ToDoList />
      </div>
    </div>
  );
}

export default App;
