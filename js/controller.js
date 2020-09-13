//Class that links view and controller
class Controller {
	constructor() {
		let self=this;
		this.model=new Model();
		this.view=new View();

		this.update();
		this.view.listen(() => {
			self.update();
		});
	}
	update() {
		let self=this;
		self.view.set_loading(true);
		if(this.view.from==this.view.to) {
			self.view.data=1;
			self.view.set_loading(false);
		}
		else {
			this.model.request(this.view.from, this.view.to).then(result => {
				self.view.data=parseInt(result)+(parseInt((result-parseInt(result))*1000)/1000);
				self.view.set_loading(false);
			}).catch(err => {
				console.log(err);
			});
		}
	}
};