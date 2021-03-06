import React from 'react'
import { connect } from 'react-redux'
import { updateSnack, fillOffer } from '../actions/DefaultAction'
import Offer from '../components/Offer'
import {
  withRouter,
} from 'react-router-dom'
import App from '../components/App'
import ApiService from '../modules/ApiService'

const mapStateToProps = (state) => {
  return {
  }
}

const mapDispatchToProps = (dispatch) => {
  return {
    onUpdateSnack: (open, message) => {
      dispatch(updateSnack({
        open: true,
        message: message
      }))
    },
  }
}

const OfferContainer = withRouter(connect(
  mapStateToProps,
  mapDispatchToProps
)(Offer))

export default OfferContainer