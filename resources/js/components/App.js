import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import { BrowserRouter, Route, Switch } from 'react-router-dom'
import Header from './Header'
import StocksList from './StocksList'
import UserStocksList from './UserStocksList'
import SingleUserStock from './SingleUserStock'
import UsersList from './UsersList'

class App extends Component {
    render () {
        return (
            <BrowserRouter>
                <div>
                    <Header />
                    <Switch>
                        <Route exact path='/' component={StocksList} />
                        <Route path="/users" component={UsersList} />
                        <Route path="/user/:id/userstocks" component={UserStocksList} />
                        <Route path='/:id' component={SingleUserStock} />
                    </Switch>
                </div>
            </BrowserRouter>
        )
    }
}

ReactDOM.render(<App />, document.getElementById('app'))
