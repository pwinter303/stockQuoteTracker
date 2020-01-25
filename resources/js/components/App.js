import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import { BrowserRouter, Route, Switch } from 'react-router-dom'
import Header from './Header'
import StocksList from './StocksList'
import UserStocksList from './UserStocksList'
import SingleUserStock from './SingleUserStock'

class App extends Component {
    render () {
        return (
            <BrowserRouter>
                <div>
                    <Header />
                    <Switch>
                        <Route exact path='/' component={StocksList} />
                        <Route path="/user/:id" component={UserStocksList} />
                        <Route path='/:id' component={SingleUserStock} />
                    </Switch>
                </div>
            </BrowserRouter>
        )
    }
}

ReactDOM.render(<App />, document.getElementById('app'))
