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
                                {/*<Link className='btn btn-primary btn-sm mb-3' to='/create'>*/}
                                {/*    Create new stock*/}
                                {/*</Link>*/}
                                <ul className='list-group list-group-flush'>
                                    {stocks.map(stock => (
                                        <Link
                                            className='list-group-item list-group-item-action d-flex justify-content-between align-items-center'
                                            to={`stock/${stock.id}`}
                                            key={stock.id}
                                        >
                                            <div className='col-md-7'>
                                            {stock.name}
                                            </div>
                                            <div className='col-md-2'>
                                            {stock.ticker}
                                            </div>
                                            <span className='badge badge-primary badge-pill'>
                            View Users Watching Stock
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
