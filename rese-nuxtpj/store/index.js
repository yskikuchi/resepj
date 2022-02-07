export const state = () => ({
  shops: [],
  myBookings:[],
})

export const getters = {
  getCount: state => (id) => {
    const result = state.favorites.count.find(e => e.post_id == id);
    return result;
  },
  getFavData: state => (postId, userId) => {
    const checkFavorite = state.favorites.data.find(e => e.post_id == postId && e.user_id == userId);
    return checkFavorite;
  },
  getCurrentShop: state => (id) => {
    const currentShop = state.shops.find(e => e.id == id);
    return currentShop;
  }
}

export const mutations = {
  setShops(state, payload) {
    state.shops = payload;
  },
  setMyBookings(state, payload) {
    state.myBookings = payload;
  }
}

export const actions = {
  async getShops({ commit }) {
    const shops = await this.$axios.get("/api/shops");
    const shopList = shops.data.data;
    commit('setShops', shopList);
  },
  async getMyBookings({ commit }) {
    const resData = await this.$axios.get('/api/booking');
    const bookingList = resData.data.data;
    commit('setMyBookings', bookingList);
  }
}