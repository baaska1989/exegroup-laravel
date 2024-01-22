import axios from "axios";

const endpoint = "/api/auth/";

class SessionAPI
{
    static login(data) {
        return axios
            .create({
                baseURL: endpoint + "login",
                responseType: "json",
            })
            .post(``, data)
            .then((response) => {
                return response.data;
            })
            .catch((error) => {
                return error;
            });
    }

    static client_login(data) {
        return axios
            .create({
                baseURL: endpoint + "clientLogin",
                responseType: "json",
            })
            .post(``, data)
            .then((response) => {
                return response.data;
            })
            .catch((error) => {
                return error;
            });
    }
    static client_register(data) {
        return axios
            .create({
                baseURL: endpoint + "clientRegister",
                responseType: "json",
            })
            .post(``, data)
            .then((response) =>
            {
                return response.data;
            })
            .catch((error) => {
                return error;
            });
    }

    static logout() {
        return axios
            .create({
                baseURL: endpoint + "logout",
                responseType: "json",
                headers: {
                    AUTHORIZATION: "Bearer " + localStorage.getItem("token"),
                    "Content-Type": "application/json",
                },
            })
            .post()
            .then((response) => {
                return response.data;
            })
            .catch((error) => {
                return error;
            });
    }

    static client_logout() {
        return axios
            .create({
                baseURL: endpoint + "client_logout",
                responseType: "json",
                headers: {
                    "Content-Type": "application/json",
                },
            })
            .post()
            .then((response) => {
                return response.data;
            })
            .catch((error) => {
                return error;
            });
    }

    static check() {
        return axios
            .create({
                baseURL: endpoint + "user",
                responseType: "json",
                headers: {
                    AUTHORIZATION: "Bearer " + localStorage.getItem("token"),
                    "Content-Type": "application/json",
                },
            })
            .get()
            .then((response) => {
                return response.data;
            })
            .catch((error) => {
                return error;
            });
    }

    static client_check() {
        return axios
            .create({
                baseURL: endpoint + "client",
                responseType: "json",
                headers: {
                    AUTHORIZATION: "Bearer " + localStorage.getItem("phone"),
                    "Content-Type": "application/json",
                },
            })
            .get()
            .then((response) => {
                return response.data;
            })
            .catch((error) => {
                return error;
            });
    }
}

export default SessionAPI;
