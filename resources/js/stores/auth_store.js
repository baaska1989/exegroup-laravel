import SessionAPI from "../api/session";
import router from '../router';

const auth_store = {

    state: {
        isLoggedIn: !!localStorage.getItem("token"),
        isLoggedInClient: !!localStorage.getItem("phone"),
        pending: false,
        user: JSON.parse(localStorage.getItem("user")),
        client: JSON.parse(localStorage.getItem("client")),
        auth_error_messages: []
    },

    mutations: {

        'LOGIN':  function(state){
            state.pending = true;
        },

        'CLIENT_LOGIN':  function(state){
            state.pending = true;
        },

        'CLIENT_REGISTER':  function(state){
            state.pending = true;
        },

        'LOGIN_SUCCESS': function(state, response) {
            localStorage.setItem("token", response.token);
            localStorage.setItem("user", JSON.stringify(response.user));
            localStorage.setItem("colorScheme", "theme-3")
            state.isLoggedIn = true;
            state.user = response.user;
            state.user.email = response.email;
            state.auth_error_messages = [];
            state.pending = false;
            router.push({ name: 'AdminDashboard' });
        },

        'CLIENT_LOGIN_SUCCESS': function(state, response)
        {
            localStorage.setItem("phone", response.phone);
            localStorage.setItem("client", JSON.stringify(response.client));
            // localStorage.setItem("selectedUser", JSON.stringify(response.client));
            state.isLoggedIn = true;
            state.client = response.client;
            // state.client = response.phone;
            state.auth_error_messages = [];
            state.pending = false;
            router.push({ name: 'ClientDashboard' });

        },

        'LOGIN_ERROR': function(state, message) {
            state.pending = false;
            state.auth_error_messages = message;
        },

        'CLIENT_LOGIN_ERROR': function(state, message) {
            state.pending = false;
            state.auth_error_messages = message;
        },

        'CLIENT_REGISTER_ERROR': function(state, message) {
            state.pending = false;
            state.auth_error_messages = message;
        },

        'LOGOUT': function(state) {
            state.isLoggedIn = false;
            state.user = null;
            state.auth_error_messages = [];
        },

        'CLIENT_LOGOUT': function(state) {
            state.isLoggedIn = false;
            state.client = null;
            state.auth_error_messages = [];
        },

        'AUTH_RESET': function(state) {
            state.user = null;
            state.auth_error_messages = []
        },

        'AUTH_CHECK': function(state, response){
            if (state.isLoggedIn)
            {
                state.user = state.user;
                state.client = state.client;
                if (state.user){
                    localStorage.setItem('selectedUser', JSON.stringify(state.user));
                }
                else {
                    localStorage.setItem('selectedUser', JSON.stringify(state.client));
                }

            }
            else
            {
                state.isLoggedIn = false;
                state.user = null;
                localStorage.removeItem("token");
                localStorage.removeItem("user");
                localStorage.removeItem("selectedUser");
            }
        }
    },

    actions: {
        AUTH_CHECK({ commit })
        {
            if (localStorage.getItem('token'))
            {
                return SessionAPI.check().then(response =>
                {
                    commit('AUTH_CHECK', response)
                })
            }else if(localStorage.getItem('phone'))
            {
                return SessionAPI.client_check().then(response =>
                {
                    commit('AUTH_CHECK', response)
                })

            }
            else
            {
                commit('AUTH_CHECK', { status: false })
            }
        },

        LOGIN({ commit }, creds) {
            commit('LOGIN'); // show spinner
            return SessionAPI.login(creds).then(response => {
                if (response.status)
                {
                    commit('LOGIN_SUCCESS', response);
                }else
                {
                    commit('LOGIN_ERROR', [response.message]);
                }
            });
        },

        CLIENT_LOGIN({ commit }, creds) {
            commit('CLIENT_LOGIN');
            return SessionAPI.client_login(creds).then(response => {
                if (response.status)
                {
                    commit('CLIENT_LOGIN_SUCCESS', response);
                }else
                {
                    commit('CLIENT_LOGIN_ERROR', [response.message]);
                }
            });
        },

        CLIENT_REGISTER({commit}, creds)
        {
            commit('CLIENT_REGISTER');
            return SessionAPI.client_register(creds).then(response =>
            {
                if(response.status)
                {
                    commit('CLIENT_LOGIN_SUCCESS', response);
                }else{
                    commit('CLIENT_REGISTER_ERROR', [response.message]);
                    router.push({ name: 'UserLogin' });
                }
            });
        },

        LOGOUT({ commit }) {
            return SessionAPI.logout().then(response =>
            {
                // window.localStorage.clear();
                window.localStorage.removeItem('selectedUser');
                localStorage.removeItem("client");
                localStorage.removeItem("token");
                localStorage.removeItem("phone");
                localStorage.removeItem('user');
                commit('LOGOUT');
            });
        },

        CLIENT_LOGOUT({ commit })
        {
            return SessionAPI.client_logout().then(response =>
            {
                localStorage.removeItem("client");
                localStorage.removeItem("phone");
                commit('CLIENT_LOGOUT');
            });
        },

        RESET_AUTH({ commit }){
            commit('AUTH_RESET')
        }
    },

    getters: {
        user: state => {
            return state.user
        },
        client: state => {
            return state.client
        },
        isLoggedIn: state => {
            return state.isLoggedIn
        },
        auth_error_messages: state => {
            return state.auth_error_messages
        }
    }
}

export default auth_store;
