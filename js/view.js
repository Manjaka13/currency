//Class that handles/update the view
class View {
	constructor() {
		this._from=document.querySelector("#currency .left .devise1");
		this._to=document.querySelector("#currency .right .devise2");
		this.loading=document.querySelector("#currency p .loading");
		this.data_area=document.querySelector("#currency p .data");
	}
	get from() {
		return this._from.value;
	}
	get to() {
		return this._to.value;
	}
	set data(value) {
		if(value>=0)
			this.data_area.innerText=value;
	}
	//Set loading
	set_loading(status) {
		if(status) {
			this.loading.style.display="block";
			this.data_area.style.display="none";
		}
		else {
			this.loading.style.display="none";
			this.data_area.style.display="block";
		}
	}
	//Listener
	listen(callback) {
		let self=this;
		this._from.addEventListener("change", () => {
			if(typeof(callback)==="function")
				callback();
		});
		this._to.addEventListener("change", () => {
			if(typeof(callback)==="function")
				callback();
		});
	}
};