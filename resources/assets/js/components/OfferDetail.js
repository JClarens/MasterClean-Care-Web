import React, { Component } from 'react'
import PropTypes from 'prop-types'
import { Link } from 'react-router-dom'
import { Card, CardActions, CardHeader, CardTitle, CardText } from 'material-ui/Card'
import FlatButton from 'material-ui/FlatButton'
import App from './App'

class OfferDetail extends Component {
  constructor(props) {
    super(props)

    this.state = {
      offer: {}
    }
  }

  componentDidMount() {
    this.props.getOffer(this.props.id, this)
  }

  comments(comments) {
    const GetFormattedDate = date => {
      let dt = new Date(date)
      let mm = dt.getMonth() + 1;
      let dd = dt.getDate();

      return [
        (dd > 9 ? '' : '0') + dd,
        (mm > 9 ? '' : '0') + mm,
        dt.getFullYear()
      ].join('/');
    };

    return comments.map((comment, id) => {
      return (
        <Card className="col s12" style={id > 0 ? { marginTop: '10px' } : {}} key={id}>
          <CardHeader
            title={comment.user_id.name}
            subtitle={GetFormattedDate(comment.created_at)}
            avatar={comment.user_id.avatar}
          />
          <CardText>
            {comment.comment}
          </CardText>
        </Card>
      )
    })
  }

  render() {
    const { offer } = this.state;
    return (
      <div>
        {
          offer ?
            <div>
              <Card className="col s12" zDepth={0} >
                <CardTitle title={offer.title} />
                <CardText>
                  {offer.content}
                </CardText>
              </Card>
              <Card className="col s12" style={{ marginTop: '10px', paddingBottom: '10px' }}>
                <CardTitle title="Komentar" />
                <CardText>
                  {
                    offer.comment ?
                      this.comments(offer.comment)
                      :
                      'Tidak ada komentar.'
                  }
                </CardText>
              </Card>
            </div>
            :
            <Card className="col s12" >
              <CardHeader title="Artikel tidak ditemukan" />
            </Card>
        }
      </div>
    )
  }
}

OfferDetail.propTypes = {
  id: PropTypes.string.isRequired,
  getOffer: PropTypes.func.isRequired,
}

export default OfferDetail