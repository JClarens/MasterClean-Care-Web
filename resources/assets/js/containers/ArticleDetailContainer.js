import React from 'react'
import { connect } from 'react-redux'
import { updateSnack, fillArticle } from '../actions/DefaultAction'
import ArticleDetail from '../components/ArticleDetail'
import {
    withRouter,
} from 'react-router-dom'
import App from '../components/App'
import ApiService from '../modules/ApiService'

const mapStateToProps = (state) => {
    return { }
}

const mapDispatchToProps = (dispatch) => {
    return { 
        onUpdateSnack: (open, message) => {
            dispatch(updateSnack({
                open: true,
                message: message
            }))
        },
        getArticle: (id, self) => {
            let article = {}
            ApiService.onGet(
                '/api/article',
                id,
                function (response) {
                    let data = response

                    if (data.status != 200) {
                        dispatch(updateSnack({
                            open: true,
                            message: data.message
                        }))
                    }
                    else {
                        article = data.data
                        self.setState({ article })
                    }
                },
                function (error) {
                    dispatch(updateSnack({
                        open: true,
                        message: error.name + ": " + error.message
                    }))
                    this.setState(article)                    
                }
            )
        },
    }
}

const ArticleDetailContainer = withRouter(connect(
    mapStateToProps,
    mapDispatchToProps
)(ArticleDetail))

export default ArticleDetailContainer