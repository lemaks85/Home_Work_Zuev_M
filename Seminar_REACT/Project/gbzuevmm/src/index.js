import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';
import Message from './components/Message';
import Message2 from './components/Message2';
import text from './components/text.json';


const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <React.StrictMode>
    <App />
    <Message firstName="Maksim" lastName="Zuev" student="GeekBrains"  group="6014"/>
    <Message2 firstName={text.firstName} lastName={text.lastName} student={text.student}  group={text.group} />
  </React.StrictMode>
);

reportWebVitals();
