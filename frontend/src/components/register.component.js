import React, { Component } from "react";
import Form from "react-validation/build/form";
import Input from "react-validation/build/input";
import CheckButton from "react-validation/build/button";
import { isEmail } from "validator";

import AuthService from "../services/auth.service";

const required = value => {
  if (!value) {
    return (
      <div className="alert alert-danger" role="alert">
        This field is required!
      </div>
    );
  }
};

const vnom = value => {
  if ((value.length < 2 || value.length > 60)) {
    return (
      <div className="alert alert-danger" role="alert">
        The name must be between 6 and 40 characters.
      </div>
    );
  }
};

const vprenom = value => {
    if ((value.length < 2 || value.length > 100)) {
      return (
        <div className="alert alert-danger" role="alert">
          The name must be between 6 and 40 characters.
        </div>
      );
    }
  };

const vadresse = value => {
    if ((value.length < 6 || value.length > 150)) {
      return (
        <div className="alert alert-danger" role="alert">
          The adresse must be between 6 and 150 characters.
        </div>
      );
    }
};

const vtelephone = value => {
    if ((value.length < 3 || value.length > 18)) {
      return (
        <div className="alert alert-danger" role="alert">
          The telephone must be between 6 and 20 characters.
        </div>
      );
    }
};

const vrole = value => {
    if ((value.length < 3 || value.length > 18)) {
      return (
        <div className="alert alert-danger" role="alert">
          The role is not choice.
        </div>
      );
    }
};

const vusername = value => {
  if ((value.length < 3 || value.length > 100) && isEmail(value)) {
    return (
      <div className="alert alert-danger" role="alert">
        The username is not valid. enter your email
      </div>
    );
  }
};

const vpassword = value => {
  if (value.length < 6 || value.length > 40) {
    return (
      <div className="alert alert-danger" role="alert">
        The password must be between 6 and 40 characters.
      </div>
    );
  }
};

export default class Register extends Component {
  constructor(props) {
    super(props);
    this.handleRegister = this.handleRegister.bind(this);
    this.onChangeUsername = this.onChangeUsername.bind(this);
    this.onChangeEmail = this.onChangeEmail.bind(this);
    this.onChangePassword = this.onChangePassword.bind(this);

    this.state = {
      username: "",
      nom: "",
      prenom: "",
      password: "",
      telephone: "",
      adresse: "",
      role: "",
      successful: false,
      message: ""
    };
  }

  onChangeUsername(e) {
    this.setState({
      username: e.target.value
    });
  }

  onChangeNom(e) {
    this.setState({
      nom: e.target.value
    });
  }

  onChangePrenom(e) {
    this.setState({
      prenom: e.target.value
    });
  }

  onChangePassword(e) {
    this.setState({
      password: e.target.value
    });
  }

  onChangeAdresse(e) {
    this.setState({
      adresse: e.target.value
    });
  }

  onChangeTelephone(e) {
    this.setState({
      telephone: e.target.value
    });
  }

  onChangeRole(e) {
    this.setState({
      role: e.target.value
    });
  }

  handleRegister(e) {
    e.preventDefault();

    this.setState({
      message: "",
      successful: false
    });

    this.form.validateAll();

    if (this.checkBtn.context._errors.length === 0) {
      AuthService.register(
        this.state.username,
        this.state.nom,
        this.state.password,
        this.state.prenom,
        this.state.adresse,
        this.state.telephone,
        this.state.role
      ).then(
        response => {
          this.setState({
            message: response.data.message,
            successful: true
          });
        },
        error => {
          const resMessage =
            (error.response &&
              error.response.data &&
              error.response.data.message) ||
            error.message ||
            error.toString();

          this.setState({
            successful: false,
            message: resMessage
          });
        }
      );
    }
  }

  render() {
    return (
      <div className="col-md-12">
        <div className="card card-container">
          <img
            src="//ssl.gstatic.com/accounts/ui/avatar_2x.png"
            alt="profile-img"
            className="profile-img-card"
          />

          <Form
            onSubmit={this.handleRegister}
            ref={c => {
              this.form = c;
            }}
          >
            {!this.state.successful && (
              <div>
                <div className="form-group">
                  <label htmlFor="username">Username</label>
                  <Input
                    type="text"
                    className="form-control"
                    name="username"
                    value={this.state.username}
                    onChange={this.onChangeUsername}
                    validations={[required, vusername]}
                  />
                </div>


                <div className="form-group">
                  <label htmlFor="password">Password</label>
                  <Input
                    type="password"
                    className="form-control"
                    name="password"
                    value={this.state.password}
                    onChange={this.onChangePassword}
                    validations={[required, vpassword]}
                  />
                </div>

                <div className="form-group">
                  <label htmlFor="nom">Nom</label>
                  <Input
                    type="text"
                    className="form-control"
                    name="nom"
                    value={this.state.nom}
                    onChange={this.onChangeNom}
                    validations={[required, vnom]}
                  />
                </div>

                <div className="form-group">
                  <label htmlFor="prennom">Prenom</label>
                  <Input
                    type="text"
                    className="form-control"
                    name="prenom"
                    value={this.state.prenom}
                    onChange={this.onChangePrenom}
                    validations={[required, vprenom]}
                  />
                </div>

                <div className="form-group">
                  <label htmlFor="adresse">Adresse</label>
                  <Input
                    type="text"
                    className="form-control"
                    name="adresse"
                    value={this.state.adresse}
                    onChange={this.onChangeAdresse}
                    validations={[required, vadresse]}
                  />
                </div>

                <div className="form-group">
                  <label htmlFor="telephone">Téléphone</label>
                  <Input
                    type="text"
                    className="form-control"
                    name="telephone"
                    value={this.state.telephone}
                    onChange={this.onChangeTelephone}
                    validations={[required, vtelephone]}
                  />
                </div>

                <div className="form-group">
                  <label htmlFor="role">ROLE</label>
                  <select 
                    name="role"
                    value={this.state.role}
                    onChange={this.onChangeRole}
                    validations={[required, vrole]}
                  >
                        <option value="ROLE_USER">ROLE_USER</option>
                        <option>ROLE_ADMIN</option>
                  </select>
                </div>

                <div className="form-group">
                  <button className="btn btn-primary btn-block">Sign Up</button>
                </div>
              </div>
            )}

            {this.state.message && (
              <div className="form-group">
                <div
                  className={
                    this.state.successful
                      ? "alert alert-success"
                      : "alert alert-danger"
                  }
                  role="alert"
                >
                  {this.state.message}
                </div>
              </div>
            )}
            <CheckButton
              style={{ display: "none" }}
              ref={c => {
                this.checkBtn = c;
              }}
            />
          </Form>
        </div>
      </div>
    );
  }
}