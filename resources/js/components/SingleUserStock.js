import axios from 'axios'
import React, { Component } from 'react'

class SingleUserStock extends Component {
    constructor (props) {
        super(props)
        this.state = {
            stock: {},
            stockTriggers: []
        }
    }

    componentDidMount () {
        const stockId = this.props.match.params.id

        axios.get(`/api/userstocks/${stockId}`).then(response => {
            this.setState({
                stock: response.data,
                stockTriggers: response.data.stockTriggers
            })
        })
    }

    render () {
        const { stock, stockTriggers } = this.state

        return (
            <div className='container py-4'>
                <div className='row justify-content-center'>
                    <div className='col-md-8'>
                        <div className='card'>
                            <div className='card-header'>{stock.name}</div>
                            <div className='card-body'>
                                <p>{stock.description}</p>

                                <button className='btn btn-primary btn-sm'>
                                    Mark as completed
                                </button>

                                <hr />

                                <ul className='list-group mt-3'>
                                    {stockTriggers.map(task => (
                                        <li
                                            className='list-group-item d-flex justify-content-between align-items-center'
                                            key={task.id}
                                        >
                                            {task.title}

                                            <button className='btn btn-primary btn-sm'>
                                                Mark as completed
                                            </button>
                                        </li>
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

export default SingleUserStock
