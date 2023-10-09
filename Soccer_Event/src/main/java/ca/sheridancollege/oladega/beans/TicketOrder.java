package ca.sheridancollege.oladega.beans;
import lombok.AllArgsConstructor;
import lombok.NoArgsConstructor;
import lombok.Data;

@AllArgsConstructor
@NoArgsConstructor
@Data

public class TicketOrder {

	private String firstName;
	private String lastName;
	private String email;
	private long phoneNumber;
	private int price;
	private String ageGroup;
	private boolean unitedFC;
	private boolean cityFC;
	private boolean chelseaFC;
	private boolean castleFC;
	
	private String[]  ageGroups = {"Adult Player (20 years old and above)", "Teenager Player (12 years - 19 years old)","Kid Player (6 years - 11 years old)"};
}
