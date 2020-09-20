//Handles data read and update
class Model {
	constructor() {
		this.target="php/get_currency.php";
	}	
	async request(from, to) {
		return ajax(this.target, {from: from, to: to});
	}
};