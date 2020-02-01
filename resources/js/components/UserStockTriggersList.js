import axios from 'axios'
import React, { Component } from 'react'
import {Link} from "react-router-dom";

class UserStockTriggersList extends Component {
    constructor () {
        super()
        this.state = {
            stocktriggers: []
        }
    }

    //NOTE.... must use the backticks and NOT regular quotes...
    componentDidMount () {
        //get id from the URL
        const user_stock_id = this.props.match.params.id
        axios.get((`/api/userstock/${user_stock_id}/stocktriggers`)).then(response => {
            this.setState({
                stocktriggers: response.data
            })
        })
    }

    render () {
        const { stocktriggers } = this.state
        const user_stock_id = this.props.match.params.id
        return (
            <div className='container py-4'>
                <div className='row justify-content-center'>
                    <div className='col-md-8'>
                        <div className='card'>
                            <div className='card-header'>Triggers</div>
                            <div className='card-body'>
                                <Link className='btn btn-primary btn-sm mb-3' to={`/userstock/${user_stock_id}/triggeradd`}>
                                    Add Trigger
                                </Link>
                                <ul className='list-group list-group-flush'>
                                    {stocktriggers.map(stocktrigger => (
                                        <Link
                                            className='list-group-item list-group-item-action d-flex justify-content-between align-items-center'
                                            to={`/userstock/${stocktrigger.id}/stocktriggers`}
                                            key={stocktrigger.id}
                                        >
                                            {stocktrigger.ticker}
                                            ------------
                                            {stocktrigger.name}
                                            -----------
                                            <span className='badge badge-primary badge-pill'>
                                            Change Triggers
                                        </span>
                                        </Link>
                                    ))}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
    }

    export default UserStockTriggersList
