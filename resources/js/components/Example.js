import React from 'react';
import ReactDOM from 'react-dom';
import  Header  from "./navbar/header";
import { BrowserRouter, Route, Routes,Switch } from 'react-router-dom';

function Example() {
    return (
        <div className="container">
         <Header />
    </div>
    );
}

export default Example;

if (document.getElementById('raiyan')) {
    ReactDOM.render(<Example />, document.getElementById('raiyan'));
}
