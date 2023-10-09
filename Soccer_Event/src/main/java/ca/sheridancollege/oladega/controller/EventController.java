package ca.sheridancollege.oladega.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PostMapping;

import ca.sheridancollege.oladega.beans.TicketOrder;
import ca.sheridancollege.oladega.database.SoccerDatabase;

@Controller
public class EventController {
	
	@GetMapping("/")
	public String getRootPage()
	{
		return "root.html";
	}
	
	@GetMapping("/addPage")
	public String getaddPage(Model model)
	{
		model.addAttribute("ticketOrder", new TicketOrder());
		return "addPage.html";
	}
	
	@GetMapping("/addPageSubmition")
	public String getUserInfo(@ModelAttribute TicketOrder ticketOrder)
	{
		SoccerDatabase.participantList.add(ticketOrder);
		return "redirect:/addPage";
	}
	
	
	@GetMapping("/viewPage")
	public String getviewPage(Model model)
	{
		model.addAttribute("ticketInfo",SoccerDatabase.participantList);
		return "viewPage.html";
	}


}
