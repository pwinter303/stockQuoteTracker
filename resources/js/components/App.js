import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import { BrowserRouter, Route, Switch } from 'react-router-dom'
import Header from './Header'
import StocksList from './StocksList'
import UserStocksList from './UserStocksList'
import SingleUserStock from './SingleUserStock'
import UserStockCreate from './UserStockCreate'
import UserStockTriggersList from './UserStockTriggersList'
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
                        <Route path="/userstock/:id/stocktriggers" component={UserStockTriggersList} />
                        <Route path="/user/:id/stockadd" component={UserStockCreate} />
                        <Route path='/stock/:id' component={SingleUserStock} />
                    </Switch>
                </div>
            </BrowserRouter>
        )
    }
}

ReactDOM.render(<App />, document.getElementById('app'))
