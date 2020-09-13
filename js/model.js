//Handles data read and update
class Model {
	constructor() {
		this.target="php/get_currency.php";
	}	
	async request(from, to) {
		let self=this;
		async function req() {
			return await ajax(self.target, {from: from, to: to});
		}
		return req();
	}
};