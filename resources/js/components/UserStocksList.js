import axios from 'axios'
import React, { Component } from 'react'
import { Link } from 'react-router-dom'

class UserStocksList extends Component {
    constructor () {
        super()
        this.state = {
            userstocks: []
        }
    }




    componentDidMount () {
        //get id from the URL
        // const { handle } = this.props.match.params
        const userId = this.props.match.params.id

        console.log('this is userId' + userId);

        //0f4a78c4-e172-4d56-8627-83b66da01411
        // const url = '/api/user/' + userId + '/userstocks'
        // console.log('this is url' + url);
        // axios.get(url).then(response => {

        //NOTE.... must use the backticks and NOT regular quotes...
        axios.get(`/api/user/${userId}/userstocks`).then(response => {
            this.setState({
                userstocks: response.data
            })
        })
    }

    render () {
        const { userstocks } = this.state
        return (
            <div className='container py-4'>
                <div className='row justify-content-center'>
                    <div className='col-md-8'>
                        <div className='card'>
                            <div className='card-header'>User Stocks</div>
                            <div className='card-body'>
                                <Link className='btn btn-primary btn-sm mb-3' to='/create'>
                                    Create new userstock
                                </Link>
                                <ul className='list-group list-group-flush'>
                                    {userstocks.map(userstock => (
                                        <Link
                                            className='list-group-item list-group-item-action d-flex justify-content-between align-items-center'
                                            to={`/${userstock.id}`}
                                            key={userstock.id}
                                        >
                                            {userstock.name}
                                            ------------
                                            {userstock.id}
                                            -----------
                                            {userstock.stock_id}
                                            -----------
                                            {userstock.user_id}
                                            -----------
                                            <span className='badge badge-primary badge-pill'>
                            {userstock.stock_id}
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

export default UserStocksList
