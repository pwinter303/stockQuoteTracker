import axios from 'axios'
import React, { Component } from 'react'
import { Link } from 'react-router-dom'

class StocksList extends Component {
    constructor () {
        super()
        this.state = {
            stocks: []
        }
    }

    componentDidMount () {
        axios.get('/api/stocks').then(response => {
            this.setState({
                stocks: response.data
            })
        })
    }

    render () {
        const { stocks } = this.state
        return (
            <div className='container py-4'>
                <div className='row justify-content-center'>
                    <div className='col-md-8'>
                        <div className='card'>
                            <div className='card-header'>All stocks</div>
                            <div className='card-body'>
                                <Link className='btn btn-primary btn-sm mb-3' to='/create'>
                                    Create new stock
                                </Link>
                                <ul className='list-group list-group-flush'>
                                    {stocks.map(stock => (
                                        <Link
                                            className='list-group-item list-group-item-action d-flex justify-content-between align-items-center'
                                            to={`/${stock.id}`}
                                            key={stock.id}
                                        >
                                            {stock.name}
                                            {stock.ticker}
                                            {stock.ticker}
                                            <span className='badge badge-primary badge-pill'>
                            {stock.ticker}
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

export default StocksList
