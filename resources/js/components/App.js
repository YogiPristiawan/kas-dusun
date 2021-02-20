import React from 'react';
import Test from './Test';
import Example from './Example';
import Dashboard from './Dashboard';

class App extends React.Component{
    render(){
        return(
            <div>
                <Test/>
                <Example/>
                <Dashboard/>
            </div>

        );
    }
}

export default App;